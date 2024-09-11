# Antrian:Poli-Farmasi-Kasir
Antrian Poli Klinik, Farmasi, Dan Kasir (Khusus Kasir Pemanggilan Terpisah Menggunakan WEB)
Sudah menggunakan text to speech menggunakan librari dari responsivevoice.js
data yang ditampilkan sudah sesuai jam praktek dokter
jalankan Query SQL berikut untuk update enum agar suara tidak looping

ALTER TABLE `antripoli` CHANGE `status` `status` ENUM('0','1','2','3') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
ALTER TABLE `antriapotek3` CHANGE `status` `status` ENUM('0','1','2','3') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
CREATE TABLE `antrikasir`  (
  `kd_dokter` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_poli` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` enum('0','1','2','3') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_rawat` varchar(17) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;