--однокурсников со средним баллом от .. до .., и именем %name%;
--однокурсники т.е. одногруппники? g.name = '14Ec'


SELECT n1.* FROM (
                SELECT s.*,AVG(score) FROM students AS s
                    JOIN groups AS g ON s.group_id = g.id
                    JOIN student_subject AS ss ON s.id = ss.student_id
                WHERE g.name = '14Ec'
                GROUP BY s.id
            ) n1 
WHERE n1.avg BETWEEN 3 AND 5 
    AND n1.second_name
    ILIKE '%ova%';



--всех людей, c IP которых произошло более одной регистрации, и при этом хотя бы
--у одного из них должна быть написана характеристика научного руководителя.

SELECT * FROM (
            SELECT ip.id,COUNT(*) FROM students AS s
                JOIN ipaddress_student AS ipst ON s.id = ipst.student_id
                JOIN ipaddresses AS ip ON ip.id = ipst.ipaddress_id
            GROUP BY ip.id
            HAVING count(*) > 1
        ) n1
JOIN ipaddresses AS ip ON n1.id = ip.id
JOIN ipaddress_student AS ipst ON n1.id = ipst.ipaddress_id
JOIN students AS s ON ipst.student_id = s.id
JOIN recommendation AS r ON s.id = r.student_id;
