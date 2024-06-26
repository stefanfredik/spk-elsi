<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"><?= $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="border rounded p-3">

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Tahun Bantuan</label>
                        </div>
                        <div class="col-md-8">
                            <p><?= $peserta['tahun']; ?></p>
                        </div>
                    </div>

                    <!-- <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Periode</label>
                        </div>
                        <div class="col-md-8">
                            <p></p>
                        </div>
                    </div> -->

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Nama Siswa</label>
                        </div>
                        <div class="col-md-8">
                            <p><?= $peserta['nama_siswa']; ?></p>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">NISN</label>
                        </div>
                        <div class="col-md-8">
                            <p><?= $peserta['nisn']; ?></p>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Jenis Kelamin</label>
                        </div>
                        <div class="col-md-8">
                            <p><?= $peserta['jenis_kelamin']; ?></p>
                        </div>
                    </div>



                    <hr>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Alamat</label>
                        </div>
                        <div class="col-md-8">
                            <p><?= $peserta['alamat']; ?></p>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">Kelas</label>
                        </div>
                        <div class="col-md-8">
                            <p><?= $peserta['kelas']; ?></p>
                        </div>
                    </div>

                </div>
                <hr>
                <h5>Data Kriteria</h5>
                <div class="border rounded p-3">

                    <?php foreach ($dataKriteria as $dt) : ?>
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <label class="form-label"><?= $dt['keterangan'] . ' - ' . $dt['kriteria']; ?></label>
                            </div>

                            <div class="col-md-8">
                                <?php
                                $k = 'k_' . $dt['id'];
                                foreach ($dataSubkriteria as $sk) :
                                    if ($dt['id'] == $sk['id_kriteria']) {
                                        if (isset($peserta[$k])) {
                                            echo ($peserta[$k] == $sk['id']) ? '<p>' . $sk['subkriteria'] . '</p>' : false;
                                        } else {
                                            'Data Belum Lengkap';
                                        }
                                    }
                                endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>