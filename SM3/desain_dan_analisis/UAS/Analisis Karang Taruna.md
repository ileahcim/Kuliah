# *Laporan Analisis Sistem Manajemen Karang Taruna*

## *1. Latar Belakang*

Karang Taruna merupakan organisasi kepemudaan yang berperan penting dalam pemberdayaan masyarakat melalui berbagai kegiatan sosial dan komunitas. Dalam mengelola keanggotaan serta merancang berbagai kegiatan, sering kali Karang Taruna menghadapi kendala dalam pencatatan data anggota, perencanaan program, serta dokumentasi hasil kegiatan.

Saat ini, banyak Karang Taruna yang masih menggunakan metode manual dalam pengelolaan organisasi, sehingga rawan terjadi kehilangan data, kurangnya transparansi dalam pelaporan, serta kesulitan dalam koordinasi antar anggota. Oleh karena itu, pengembangan sistem berbasis teknologi menjadi solusi yang efektif untuk meningkatkan efisiensi dan transparansi dalam pengelolaan Karang Taruna.

## *2. Identifikasi Masalah*

Beberapa permasalahan utama yang dihadapi dalam pengelolaan Karang Taruna adalah:

1. Kesulitan dalam pencatatan dan manajemen data anggota.
2. Kurangnya sistem yang sistematis dalam perencanaan dan evaluasi kegiatan.
3. Minimnya transparansi dalam laporan keuangan dan pelaksanaan program.
4. Kesulitan dalam mengatur jadwal kegiatan dan berkoordinasi antar anggota.
5. Kurangnya dokumentasi digital terkait program yang telah dilaksanakan.

## *3. Rumusan Masalah*

1. Bagaimana membangun sistem manajemen berbasis teknologi yang mencakup data anggota, perencanaan program, dan evaluasi kegiatan?
2. Bagaimana sistem ini dapat membantu dalam penjadwalan dan koordinasi kegiatan secara efektif?
3. Bagaimana sistem ini dapat menyediakan laporan transparan mengenai keuangan dan dokumentasi kegiatan?
4. Bagaimana sistem ini dapat mempermudah komunikasi dan interaksi antar anggota?

## *4. Tujuan Penelitian*

1. Mengembangkan sistem manajemen keanggotaan yang terstruktur dan mudah diakses.
2. Membangun fitur untuk perencanaan, pelaksanaan, dan evaluasi kegiatan Karang Taruna.
3. Mengembangkan sistem laporan keuangan yang transparan dan mudah diaudit.
4. Membuat fitur untuk penjadwalan dan pengorganisasian kegiatan agar lebih efisien.
5. Menyediakan sistem komunikasi internal untuk memperkuat koordinasi antar anggota.

## *5. Metode Analisis*

### *5.1. What (Apa)*
- Sistem ini bertujuan untuk meningkatkan efektivitas pengelolaan Karang Taruna dengan pendekatan berbasis teknologi.
- Masalah utama yang ingin diselesaikan adalah kesulitan dalam pencatatan anggota, koordinasi, serta dokumentasi kegiatan.

### *5.2. Why (Mengapa)*
- Sistem ini diperlukan untuk meningkatkan efisiensi organisasi dan mendorong transparansi dalam pengelolaan Karang Taruna.
- Laravel dipilih karena fleksibilitasnya dalam pengembangan web, Docker untuk memastikan lingkungan pengembangan konsisten, dan MySQL untuk penyimpanan data terstruktur.

### *5.3. Who (Siapa)*
- Sistem ini melibatkan anggota Karang Taruna, ketua, bendahara, dan pengurus lainnya.
- Pengguna utama adalah pengurus untuk mengelola keanggotaan dan kegiatan.

### *5.4. When (Kapan)*
- Implementasi sistem direncanakan dalam waktu enam bulan setelah tahap pengembangan dan pengujian.
- Evaluasi sistem dilakukan setiap enam bulan untuk penyesuaian fitur dan kebutuhan organisasi.

### *5.5. Where (Di Mana)*
- Sistem ini akan digunakan di setiap unit Karang Taruna dan dapat diakses melalui web dashboard.
- Data disimpan dalam database MySQL yang dapat dihosting secara lokal atau di cloud.

### *5.6. How (Bagaimana)*
- Sistem dikembangkan menggunakan Laravel untuk backend dan frontend, Docker untuk containerisasi, serta MySQL untuk penyimpanan data.
- Anggota mendaftar, data mereka disimpan, pengurus melakukan evaluasi kegiatan, dan sistem menyediakan laporan otomatis.

## *6. Perancangan Sistem*

### *6.1. Entity Relationship Diagram (ERD)*

```puml
@startuml

' ERD - Sistem Manajemen Karang Taruna
entity Pengguna {
  + id [PK]
  -- 
  nama
  email
  kata_sandi
  avatar
  peran_id [FK]
}

entity Peran {
  + id [PK]
  --
  nama
  deskripsi
}

entity Anggota {
  + id [PK]
  --
  pengguna_id [FK]
  nik
  alamat
  telepon
  tanggal_lahir
  tanggal_bergabung
}

entity Kegiatan {
  + id [PK]
  --
  judul
  deskripsi
  tanggal_mulai
  tanggal_selesai
  lokasi
  dibuat_oleh [FK]
}

entity Pendaftaran {
  + id [PK]
  --
  pengguna_id [FK]
  kegiatan_id [FK]
  status
  tanggal_daftar
}

entity Kehadiran {
  + id [PK]
  --
  pengguna_id [FK]
  kegiatan_id [FK]
  status
  waktu_checkin
}

entity Laporan {
  + id [PK]
  --
  kegiatan_id [FK]
  isi_laporan
  dibuat_pada
}

entity Keuangan {
  + id [PK]
  --
  jenis (Pemasukan/Pengeluaran)
  jumlah
  deskripsi
  tanggal_transaksi
  dibuat_oleh [FK]
}

Pengguna ||--o{ Peran : "Memiliki Peran"
Pengguna ||--o{ Anggota : "Adalah Anggota"
Pengguna ||--o{ Kegiatan : "Menyelenggarakan"
Pengguna ||--o{ Pendaftaran : "Mendaftar"
Pengguna ||--o{ Kehadiran : "Menghadiri"
Pengguna ||--o{ Keuangan : "Mencatat Keuangan"
Kegiatan ||--o{ Pendaftaran : "Memiliki Peserta"
Kegiatan ||--o{ Kehadiran : "Memiliki Kehadiran"
Kegiatan ||--o{ Laporan : "Memiliki Laporan"

@enduml

```
**Output**:  
![ERD](https://github.com/ileahcim/Kuliah/blob/main/SM3/desain_dan_analisis/UAS/Desain/ERD.png) 

### *6.2. Use Case Diagram*

```puml

' Use Case Diagram - Sistem Manajemen Karang Taruna
@startuml
actor "Pengurus" as Admin
actor "Anggota" as Member

rectangle System {
    usecase "Kelola Data Anggota" as U1
    usecase "Kelola Kegiatan" as U2
    usecase "Kelola Keuangan" as U3
    usecase "Lihat Laporan Kegiatan" as U4
    usecase "Lihat Laporan Keuangan" as U5
    usecase "Komunikasi Antar Anggota" as U6
}

Admin --> U1
Admin --> U2
Admin --> U3
Admin --> U4
Admin --> U5
Member --> U6
Admin --> U6
@enduml

```
**Output**:  
![Use Case](https://github.com/ileahcim/Kuliah/blob/main/SM3/desain_dan_analisis/UAS/Desain/Usecase.png) 

### *6.3. Flowchart*

```puml
' Flowchart - Pendaftaran, Kegiatan, dan Keuangan
@startuml
start
:Pengguna mengakses sistem;
if (Apakah pengguna sudah memiliki akun?) then (Ya)
    :Login ke sistem;
else (Tidak)
    :Mendaftar sebagai anggota;
    if (Data valid?) then (Ya)
        :Simpan data anggota;
        :Tampilkan dashboard anggota;
    else (Tidak)
        :Tampilkan pesan error;
        stop
    endif
endif

:Anggota memilih kegiatan yang tersedia;
if (Apakah anggota memenuhi syarat?) then (Ya)
    :Daftar ke kegiatan;
    :Admin memverifikasi pendaftaran;
else (Tidak)
    :Tampilkan notifikasi tidak memenuhi syarat;
endif

:Admin menyusun jadwal kegiatan;
:Admin mengirimkan notifikasi ke anggota;
:Anggota mengikuti kegiatan sesuai jadwal;
:Admin mencatat kehadiran anggota;

if (Apakah kegiatan selesai?) then (Ya)
    :Admin melakukan evaluasi kegiatan;
    :Data evaluasi disimpan;
else (Tidak)
    :Kegiatan berlanjut;
endif

:Admin mencatat transaksi keuangan;
:Data keuangan tersimpan;
:Admin melihat laporan keuangan;
stop
@enduml

```
**Output**: 

![Flowchaart](https://github.com/ileahcim/Kuliah/blob/main/SM3/desain_dan_analisis/UAS/Desain/Flowchrt.png) 

### *6.4. Implementasi Database (SQL)*


```sql
CREATE TABLE Pengguna (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    kata_sandi VARCHAR(255),
    avatar VARCHAR(255),
    peran_id INT,
    FOREIGN KEY (peran_id) REFERENCES Peran(id)
);

CREATE TABLE Peran (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(50),
    deskripsi TEXT
);

CREATE TABLE Anggota (
    id INT PRIMARY KEY AUTO_INCREMENT,
    pengguna_id INT,
    nik VARCHAR(20) UNIQUE,
    alamat TEXT,
    telepon VARCHAR(15),
    tanggal_lahir DATE,
    tanggal_bergabung DATE,
    FOREIGN KEY (pengguna_id) REFERENCES Pengguna(id)
);

CREATE TABLE Kegiatan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    judul VARCHAR(100),
    deskripsi TEXT,
    tanggal_mulai DATE,
    tanggal_selesai DATE,
    lokasi VARCHAR(255),
    dibuat_oleh INT,
    FOREIGN KEY (dibuat_oleh) REFERENCES Pengguna(id)
);

CREATE TABLE Pendaftaran (
    id INT PRIMARY KEY AUTO_INCREMENT,
    pengguna_id INT,
    kegiatan_id INT,
    status ENUM('terdaftar', 'ditolak', 'dikonfirmasi'),
    tanggal_daftar DATETIME,
    FOREIGN KEY (pengguna_id) REFERENCES Pengguna(id),
    FOREIGN KEY (kegiatan_id) REFERENCES Kegiatan(id)
);

CREATE TABLE Kehadiran (
    id INT PRIMARY KEY AUTO_INCREMENT,
    pengguna_id INT,
    kegiatan_id INT,
    status ENUM('hadir', 'tidak hadir'),
    waktu_checkin DATETIME,
    FOREIGN KEY (pengguna_id) REFERENCES Pengguna(id),
    FOREIGN KEY (kegiatan_id) REFERENCES Kegiatan(id)
);

CREATE TABLE Laporan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    kegiatan_id INT,
    isi_laporan TEXT,
    dibuat_pada DATETIME,
    FOREIGN KEY (kegiatan_id) REFERENCES Kegiatan(id)
);

CREATE TABLE Keuangan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    jenis ENUM('pemasukan', 'pengeluaran'),
    jumlah DECIMAL(15,2),
    keterangan TEXT,
    tanggal_transaksi DATE,
    dibuat_oleh INT,
    FOREIGN KEY (dibuat_oleh) REFERENCES Pengguna(id)
);

```

### *6.5. Konfigurasi Docker untuk Laravel dan MySQL:*

```yaml
version: '3.8'
services:
  app:
    build: .
    container_name: laravel_app
    volumes:
      - .:/var/www/html
    depends_on:
      - db
  db:
    image: mysql:8
    container_name: mysql_db
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: karang_taruna
      MYSQL_USER: user
      MYSQL_PASSWORD: password
    ports:
      - "3306:3306"
```

## *7. Kesimpulan*

Sistem manajemen Karang Taruna berbasis Laravel, Docker, dan MySQL ini bertujuan untuk meningkatkan efektivitas pengelolaan organisasi melalui pencatatan anggota, evaluasi kegiatan, serta transparansi dalam laporan keuangan dan koordinasi antar anggota.

