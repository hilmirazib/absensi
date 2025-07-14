<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->after('name', function ($table) {
                $table->string('foto_karyawan')->nullable();
                $table->string('foto_face_recognition')->nullable();
                $table->string('telepon')->nullable();
                $table->string('username')->nullable()->unique(); // Sebaiknya username unik
                $table->string('tgl_lahir')->nullable();
                $table->string('gender')->nullable();
                $table->string('tgl_join')->nullable();
                $table->text('alamat')->nullable();
                $table->bigInteger('izin_cuti')->default(0);
                $table->bigInteger('izin_lainnya')->default(0);
                $table->bigInteger('izin_telat')->default(0);
                $table->bigInteger('izin_pulang_cepat')->default(0);
                $table->string('is_admin')->nullable()->comment('Contoh: 1=admin, 0=user');
                $table->date('masa_berlaku')->nullable();
                $table->foreignId('status_pajak_id')->nullable();
                $table->foreignId('jabatan_id')->nullable();
                $table->foreignId('lokasi_id')->nullable();
                $table->string('ktp')->nullable();
                $table->string('kartu_keluarga')->nullable();
                $table->string('bpjs_kesehatan')->nullable();
                $table->string('bpjs_ketenagakerjaan')->nullable();
                $table->string('npwp')->nullable();
                $table->string('sim')->nullable();
                $table->string('no_pkwt')->nullable();
                $table->string('no_kontrak')->nullable();
                $table->date('tanggal_mulai_pkwt')->nullable();
                $table->date('tanggal_berakhir_pkwt')->nullable();
                $table->string('rekening')->nullable();
                $table->string('nama_rekening')->nullable();
                $table->bigInteger('gaji_pokok')->nullable();
                $table->bigInteger('tunjangan_makan')->nullable();
                $table->bigInteger('tunjangan_transport')->nullable();
                $table->bigInteger('tunjangan_bpjs_kesehatan')->nullable();
                $table->bigInteger('tunjangan_bpjs_ketenagakerjaan')->nullable();
                $table->bigInteger('lembur')->nullable();
                $table->bigInteger('kehadiran')->nullable();
                $table->bigInteger('thr')->nullable();
                $table->bigInteger('bonus_pribadi')->nullable();
                $table->bigInteger('bonus_team')->nullable();
                $table->bigInteger('bonus_jackpot')->nullable();
                $table->bigInteger('izin')->nullable();
                $table->bigInteger('terlambat')->nullable();
                $table->bigInteger('mangkir')->nullable();
                $table->bigInteger('saldo_kasbon')->nullable();
                $table->bigInteger('potongan_bpjs_kesehatan')->nullable();
                $table->bigInteger('potongan_bpjs_ketenagakerjaan')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'foto_karyawan', 'foto_face_recognition', 'telepon', 'username', 'tgl_lahir',
                'gender', 'tgl_join', 'alamat', 'izin_cuti', 'izin_lainnya', 'izin_telat',
                'izin_pulang_cepat', 'is_admin', 'masa_berlaku', 'status_pajak_id', 'jabatan_id',
                'lokasi_id', 'ktp', 'kartu_keluarga', 'bpjs_kesehatan', 'bpjs_ketenagakerjaan',
                'npwp', 'sim', 'no_pkwt', 'no_kontrak', 'tanggal_mulai_pkwt', 'tanggal_berakhir_pkwt',
                'rekening', 'nama_rekening', 'gaji_pokok', 'tunjangan_makan', 'tunjangan_transport',
                'tunjangan_bpjs_kesehatan', 'tunjangan_bpjs_ketenagakerjaan', 'lembur', 'kehadiran',
                'thr', 'bonus_pribadi', 'bonus_team', 'bonus_jackpot', 'izin', 'terlambat',
                'mangkir', 'saldo_kasbon', 'potongan_bpjs_kesehatan', 'potongan_bpjs_ketenagakerjaan'
            ]);
        });
    }
};
