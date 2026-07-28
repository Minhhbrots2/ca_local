# Customer Relations Migration (CRM/Home)

## Goal
- Keep legacy columns (`list_share_id`, `list_campaign_id`) working.
- Add normalized tables for better query performance and future refactor.
- Use dual-write for safe gradual rollout.

## Step 1: Create relation tables
Run:

`scripts/migrations/2026-04-14_customer_relations.sql`

## Step 2: Add customer indexes
Run CLI:

`php scripts/migrations/2026-04-14_add_customer_indexes.php`

## Step 3: Backfill old data to relation tables
Run URL (root profile):

`https://ca.futurehomes.vn/index.php?mod=crm&act=backfill_customer_relations`

## Notes
- Code has been patched to dual-write in key Home/CRM save paths.
- Read path is backward compatible (falls back to legacy columns when relation tables are empty/missing).
