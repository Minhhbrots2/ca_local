-- Seed quyền NÂNG CAO hệ MF vào default_permiss (profile_type='MF') — ĐÃ CHẠY LIVE 2026-07-02
-- Nguồn: sheet "Danh sách tính năng mF" (Free/Pro/VIP). Quy tắc: chỉ thêm tính năng bị gate
-- (Free không có / VIP-only); tính năng mọi gói đều có = cơ bản, không vào catalog quyền;
-- tính năng đã có code tương đương thì bỏ qua (affiliate, view_project, map_location,
-- view_price_sheets, tool_bank_interest, MF_AI, training).
-- Nhóm mới: group_social(353), group_ai(354), group_dashboard(355), group_transaction(356).
-- Nhóm cũ tái dùng: group_stock(187), group_crm(194).
INSERT INTO default_permiss (permiss_id, profile_type, parent_id, code, title, description, order_no, is_trash) VALUES
(353,'MF',0,'group_social','Quyền Social/Content','',177,0),
(354,'MF',0,'group_ai','Quyền AI','',178,0),
(355,'MF',0,'group_dashboard','Quyền báo cáo','',179,0),
(356,'MF',0,'group_transaction','Quyền giao dịch','',180,0),
(357,'MF',187,'compare_stock','So sánh căn','',181,0),
(358,'MF',194,'manage_lead','Lead','',182,0),
(359,'MF',194,'customer_360','Khách hàng 360','',183,0),
(360,'MF',194,'customer_timeline','Timeline tương tác','',184,0),
(361,'MF',194,'schedule_reminder','Nhắc lịch','',185,0),
(362,'MF',194,'ai_lead_scoring','AI chấm điểm lead','',186,0),
(363,'MF',194,'assign_lead','Phân công lead','',187,0),
(364,'MF',194,'crm_pipeline','Pipeline','',188,0),
(365,'MF',194,'auto_assign_data','Phân số tự động','',189,0),
(366,'MF',353,'manage_social_channel','Quản lý Facebook/TikTok/Youtube','',190,0),
(367,'MF',353,'ai_social_report','AI Social Report','',191,0),
(368,'MF',353,'post_schedule','Lịch đăng bài','',192,0),
(369,'MF',353,'content_library','Kho content','',193,0),
(370,'MF',353,'ai_write_content','AI viết content','',194,0),
(371,'MF',354,'ai_sale_coaching','AI coaching sale','',195,0),
(372,'MF',354,'ai_market_analysis','AI phân tích thị trường','',196,0),
(373,'MF',354,'ai_action_suggest','AI gợi ý hành động','',197,0),
(374,'MF',355,'dashboard_leader','Dashboard Leader','',198,0),
(375,'MF',355,'dashboard_bod','Dashboard BOD','',199,0),
(376,'MF',355,'report_kpi','Báo cáo KPI','',200,0),
(377,'MF',355,'report_market','Báo cáo thị trường','',201,0),
(378,'MF',356,'register_transaction','Đăng ký giao dịch','',202,0),
(379,'MF',356,'track_booking','Theo dõi booking','',203,0),
(380,'MF',356,'commission','Hoa hồng','',204,0);

-- Đợt 2 (cùng ngày, user yêu cầu thêm lại các tính năng mọi-gói-đều-có; chỉ loại account cơ bản + trùng key):
INSERT INTO default_permiss (permiss_id, profile_type, parent_id, code, title, description, order_no, is_trash) VALUES
(381,'MF',0,'group_academy','Quyền học tập','',205,0),
(382,'MF',0,'group_community','Quyền cộng đồng','',206,0),
(383,'MF',187,'national_stock_fund','Quỹ căn toàn quốc','',207,0),
(384,'MF',187,'search_advanced','Tìm kiếm nâng cao','',208,0),
(385,'MF',187,'payment_schedule','Tiến độ thanh toán','',209,0),
(386,'MF',187,'layout_media','Layout/Media','',210,0),
(387,'MF',354,'ai_project_qa','AI hỏi đáp dự án','',211,0),
(388,'MF',354,'ai_customer_advisor','AI tư vấn khách','',212,0),
(389,'MF',381,'video_course','Video học','',213,0),
(390,'MF',381,'quiz','Quiz','',214,0),
(391,'MF',381,'learning_path','Lộ trình học','',215,0),
(392,'MF',381,'certificate','Chứng chỉ','',216,0),
(393,'MF',382,'broker_club','CLB môi giới','',217,0),
(394,'MF',382,'project_group','Nhóm dự án','',218,0),
(395,'MF',382,'qa_forum','Hỏi đáp','',219,0),
(396,'MF',382,'service_marketplace','Marketplace dịch vụ','',220,0),
(397,'MF',355,'dashboard_personal','Dashboard cá nhân','',221,0);

-- Sửa nhóm hỏng: dòng 254 bị đảo code<->title kèm mojibake ('CÃ¡c tÃ­nh nÄƒng khÃ¡c' nằm ở cột code)
UPDATE default_permiss SET code='group_other', title='Các tính năng khác' WHERE permiss_id=254 AND profile_type='MF';

-- CHƯA xử lý (ghi nhận): dòng mồ côi permiss_id=174 (MF, code='MF_AI', parent_id=77 không tồn tại trong MF)
-- trùng với dòng 255 (MF_AI dưới group_other) — nếu dọn: UPDATE default_permiss SET is_trash=1 WHERE permiss_id=174;
