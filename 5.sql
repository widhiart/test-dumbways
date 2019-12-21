CREATE DATABASE count;

CREATE TABLE `tb_caleg` (
  `id` int(12) NOT NULL,
  `name` varchar(200) NOT NULL,
  `id_partai` int(12) NOT NULL,
  `earned_vote` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `tb_caleg` (`id`, `name`, `id_partai`, `earned_vote`) VALUES
(1, 'Sera', 2, 100),
(2, 'Dobleh', 1, 99);


CREATE TABLE `tb_partai` (
  `id` int(12) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `tb_partai` (`id`, `name`) VALUES
(1, 'Cilacap Santai'),
(2, 'Cilacap Sejahtera');

ALTER TABLE `tb_caleg`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tb_partai`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb_caleg`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


ALTER TABLE `tb_partai`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;


INSERT INTO `tb_partai` (`id`, `name`) VALUES (NULL, 'Cilacap Aman');

UPDATE `tb_partai` SET `name` = 'Cilacap Makmur' WHERE `tb_partai`.`id` = 2; 
SELECT * FROM `tb_partai` 

INSERT INTO `tb_caleg` (`id`, `name`, `id_partai`, `earned_vote`) VALUES (NULL, 'Kabur', '3', '0'), (NULL, 'Astina', '3', '0');

UPDATE `tb_caleg` SET `earned_vote` = '69' WHERE `tb_caleg`.`id` = 3;
UPDATE `tb_caleg` SET `earned_vote` = '21' WHERE `tb_caleg`.`id` = 4; 

UPDATE `tb_caleg` SET `name` = 'Is Bos', `id_partai` = '2', `earned_vote` = '70' WHERE `tb_caleg`.`id` = 4; 

SELECT tb_caleg.*, tb_partai.name as name_partai FROM `tb_caleg` LEFT JOIN `tb_partai` ON tb_caleg.id_partai = tb_partai.id;

SELECT tb_caleg.*, tb_partai.name as name_partai FROM `tb_caleg` LEFT JOIN `tb_partai` ON tb_caleg.id_partai = tb_partai.id WHERE tb_caleg.id = 3;