

SELECT f_id,TIMEDIFF(F1.arrival_date,F1.departure_date),SEC_TO_TIME(
((arrival_date-departure_date)%100)+
(((CONV((arrival_date-departure_date)/100,10,10))%100)*60)+
(((CONV((arrival_date-departure_date)/10000,10,10))%100)*3600)+
(((CONV((arrival_date-departure_date)/1000000,10,10))%100)*86400)
) AS DIFFTIME,departure_date,arrival_date FROM Flight AS F1


