<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Mahasiswa</title>
</head>
<body>
    <header>
        <h3>Absensi Mahasiswa</h3>
    </header>

    <form action="proses_absensi.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" placeholder="Nama lengkap" />
            </p>
            <p>
                <label for="npm">NPM :</label>
                <input type="text" name="npm" placeholder="NPM" />
            </p>
            <p>
                <label for="Jurusan">Jurusan :</label>
                <select name="jurusan">
                    <option>D3 Akuntansi</option>
                    <option>D3 Manajemen Bisnis</option>
                    <option>D3 Manajemen Logistik</option>
                    <option>D3 Sistem Informasi</option>
                    <option>D3 Teknik Informatika</option>
                    <option>D4 Manajemen Bisnis</option>
                    <option>D4 Akuntansi Keuangan</option>
                    <option>D4 Logistik Bisnis</option>
                    <option>D4 Teknik Informatika</option>
                    <option>D4 E-Commerce Logistik</option>
                    <option>S1 Sains Data</option>
                    <option>S1 Manajemen Transportasi</option>
                    <option>S1 Digital Bisnis</option>
                    <option>S1 Manajemen Rekayasa</option>
                    <option>S1 Manajemen Logistik</option>
                </select>
            </p>
            <p>
                <label for="Tanggal">Tanggal :</label>
                <select name="Tanggal">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                </select>
            </p>
            <p>
                <label for="Bulan">Bulan :</label>
                <label><input type="radio" name="bulan" value="januari">Januari</label>
                <label><input type="radio" name="bulan" value="februari">Februari</label>
                <label><input type="radio" name="bulan" value="maret">Maret</label>
                <label><input type="radio" name="bulan" value="april">April</label>
                <label><input type="radio" name="bulan" value="mei">Mei</label>
                <label><input type="radio" name="bulan" value="juni">Juni</label>
                <label><input type="radio" name="bulan" value="juli">Juli</label>
                <label><input type="radio" name="bulan" value="agustus">Agustus</label>
                <label><input type="radio" name="bulan" value="september">September</label>
                <label><input type="radio" name="bulan" value="oktober">Oktober</label>
                <label><input type="radio" name="bulan" value="november">November</label>
                <label><input type="radio" name="bulan" value="desember">Desember</label>
            </p>
            <p>
                <input type="submit" value="Absen" name="absensi" />
            </p>
        </fieldset>
    </form>
</body>
</html>