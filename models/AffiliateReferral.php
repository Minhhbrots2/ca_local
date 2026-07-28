<?php if (!defined('ABSPATH')) exit('No direct script access allowed');
/*======================================================================*\
|| Model: AffiliateReferral (default_affiliate_referrals, fhgroupt_user)
|| Edge table referrer_member_id -> referred_member_id (created_at DATETIME).
|| Dùng tính generation F1/F2/F3 cho dashboard Affiliate.
\*======================================================================*/
class AffiliateReferral extends DbBasic{
	function __construct(){
		$this->pkey = "id";
		$this->tbl = DB_PREFIX."affiliate_referrals";
	}

	// Lấy toàn bộ cạnh referral (data nhỏ ~vài trăm dòng).
	function getEdges(){
		global $dbconn;
		$rows = $dbconn->GetAll("SELECT referrer_member_id, referred_member_id, created_at FROM {$this->tbl}");
		return is_array($rows) ? $rows : array();
	}

	// Tính generation cho mỗi node referred dựa trên độ sâu chuỗi referrer.
	// node có referrer là gốc (không phải ai giới thiệu) => F1; sâu hơn => F2, F3...
	// Trả: array('totals'=>array(1,2,3,'4plus'), 'by_month'=>array('YYYY-MM'=>array(1,2,3,'4plus')))
	function computeGenerations($edges){
		$parent = array();
		$created = array();
		foreach($edges as $e){
			$rid = (int)$e['referred_member_id'];
			if($rid <= 0 || $rid === (int)$e['referrer_member_id']) continue; // bỏ self-referral
			$parent[$rid]  = (int)$e['referrer_member_id'];
			$created[$rid] = isset($e['created_at']) ? $e['created_at'] : '';
		}
		$depthCache = array();
		$resolve = function($node) use (&$resolve, &$parent, &$depthCache){
			if(isset($depthCache[$node])) return $depthCache[$node];
			if(!isset($parent[$node])) return 0; // node không phải referred (gốc)
			$depthCache[$node] = 1; // chặn đệ quy vô hạn nếu data có vòng
			$d = 1 + $resolve($parent[$node]);
			$depthCache[$node] = $d;
			return $d;
		};
		$totals  = array(1=>0, 2=>0, 3=>0, '4plus'=>0);
		$byMonth = array();
		foreach($parent as $node => $p){
			$d = $resolve($node);
			if($d < 1) continue;
			$bucket = ($d >= 4) ? '4plus' : $d;
			$totals[$bucket] = $totals[$bucket] + 1;
			$m = substr((string)$created[$node], 0, 7); // YYYY-MM
			if($m === '') continue;
			if(!isset($byMonth[$m])) $byMonth[$m] = array(1=>0, 2=>0, 3=>0, '4plus'=>0);
			$byMonth[$m][$bucket] = $byMonth[$m][$bucket] + 1;
		}
		return array('totals'=>$totals, 'by_month'=>$byMonth);
	}

	// Map referrer -> [referred,...] (cây xuôi) để tính downline theo người.
	function childrenMap($edges){
		$ch = array();
		foreach($edges as $e){
			$rer = (int)$e['referrer_member_id']; $red = (int)$e['referred_member_id'];
			if($red <= 0 || $red === $rer) continue;
			$ch[$rer][] = $red;
		}
		return $ch;
	}

	// Downline F1..Fmax + total cho 1 root (BFS xuôi, chống trùng/vòng). Trả {1,2,3,'total'}.
	function downline($root, $children, $maxLevel=3){
		$out = array(); $seen = array((int)$root => true); $frontier = array((int)$root);
		for($lv=1; $lv<=$maxLevel; $lv++){
			$next = array();
			foreach($frontier as $n){
				if(empty($children[$n])) continue;
				foreach($children[$n] as $c){
					if(isset($seen[$c])) continue;
					$seen[$c] = true; $next[] = $c;
				}
			}
			$out[$lv] = count($next);
			$frontier = $next;
		}
		$out['total'] = array_sum($out);
		return $out;
	}
}
?>