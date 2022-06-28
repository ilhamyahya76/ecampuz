SELECT m.mhs_nim, m.mhs_nama, mk.mk_kode, mk.mk_nama, mn.nilai from tb_mahasiswa as m 
INNER JOIN tb_mahasiswa_nilai as mn ON m.mhs_id = mn.mhs_id 
INNER JOIN tb_matakuliah as mk ON mn.mk_id = mk.mk_id WHERE nilai = (SELECT MAX(nilai) FROM tb_mahasiswa_nilai);
