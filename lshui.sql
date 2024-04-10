SELECT `deal_customer_id`, `deal_title`, MAX(`deal_begin_date`) AS `max_begin_date`, MAX(`deal_close_date`) AS `max_close_date`
FROM (
    SELECT `deal_customer_id`, `deal_title`, `deal_begin_date`, `deal_close_date`
    FROM `v_deal`
    WHERE `city_title` = "LUBUMBASHI" AND `deal_stage_id` = 6
    ORDER BY `deal_begin_date` DESC
    LIMIT 50
) AS subquery
GROUP BY `deal_customer_id`;
