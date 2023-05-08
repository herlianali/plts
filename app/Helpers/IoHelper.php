<?php

// Template

function list_tahun()
{
    $min = date('Y', strtotime('-10 years'));
    $max = date('Y', strtotime('+10 years'));
    $result = [];
    for ($i = $min; $i <= $max; $i++) $result[intval($i)] = intval($i);
    return $result;
}

function material_color()
{
    return [
        '#F44336',
        '#E91E63',
        '#9C27B0',
        '#673AB7',
        '#3F51B5',
        '#2196F3',
        '#03A9F4',
        '#00BCD4',
        '#009688',
        '#4CAF50',
        '#8BC34A',
        '#CDDC39',
        '#FFEB3B',
        '#FFC107',
        '#FF9800',
        '#FF5722',
        '#795548',
        '#9E9E9E',
        '#607D8B',
        '#000000',
        '#F0F0F0',
        '#FF00FF',
        '#00FFFF',
        '#FFFF00',
        '#00FF00',
        '#FF0000',
        '#0000FF'
    ];
}

function safe_route($route): string
{
    if (\Illuminate\Support\Facades\Route::has($route)) return route($route);
    return '#';
}

function array_bulan(): array
{
    $result = [];
    $no = 1;
    foreach (months() as $value) $result[$no++] = $value;
    return $result;
}

function unit_kerja_direktur_utama(): int
{
    return 5;
}

function unit_kerja_sekretaris_utama(): int
{
    return 23;
}

function jenis_staff(): int
{
    return 8;
}

function jenis_punya_staff(): array
{
    return [6, 7];
}

function list_catatan(): array
{
    return ['Mohon Diperhatikan', 'Undangan Harus Hadir', 'Pemberitahuan'];
}

function list_catatan_keluar(): array
{
    return ['Format Surat Salah', 'Tujuan Tidak Sesuai'];
}

function get_jabatan_aktif(): array
{
    $jabatan_aktif = [];
    $karyawan = auth()->user()->karyawan ?? [];
    if (!empty($karyawan)) {
        $jabatan_aktif = array_filter($karyawan->jabatan->toArray(), function ($item) {
            return $item['id'] == session('jabatan_aktif');
        });
        $jabatan_aktif = count($jabatan_aktif) > 0 ? head($jabatan_aktif) : [];
    }
    return $jabatan_aktif;
}

// =====================================================================================================================

function array_between_date($start, $end)
{
    $result = [];
    $begin = new DateTime($start);
    $end = new DateTime($end);
    $interval = DateInterval::createFromDateString('1 day');
    $period = new DatePeriod($begin, $interval, $end);
    foreach ($period as $dt) array_push($result, $dt->format("Y-m-d"));
    return $result;
}

function time_duration($time_start, $time_end)
{
    $start = new \DateTime(strval($time_start));
    $end = new \DateTime(strval($time_end));
    $interval = $start->diff($end);
    return $interval->h * 60 + $interval->i;
}

function gender()
{
    return ['L' => 'Laki-laki', 'P' => 'Perempuan'];
}

function gender_full()
{
    return ['Laki-Laki' => 'Laki-laki', 'Perempuan' => 'Perempuan'];
}

function religion()
{
    return ['Islam', 'Katolik', 'Kristen', 'Hindu', 'Budha', 'Konghucu', 'Lainnya',];
}

function grade_levels()
{
    return ['SD', 'SMP', 'SMA'];
}

function grades()
{
    return [
        'SD' => [1, 2, 3, 4, 5, 6],
        'SMP' => [7, 8, 9],
        'SMA' => [10, 11, 12],
    ];
}

function school_types()
{
    return ['Negeri', 'Swasta'];
}

function str_slug($value, $separator = '-')
{
    $value = str_replace('&', '', $value);
    return \Illuminate\Support\Str::slug($value, $separator);
}

function str_unslug($value, $delimiter = '-')
{
    return ucwords(str_replace($delimiter, ' ', $value));
}

function serialize_array($data)
{
    $result = [];
    foreach ($data as $key => $value) array_push($result, $key . "=" . $value);
    return join('&', $result);
}

function format_number($number)
{
    if ($number === null) return null;
    if ($number === "") return "0";
    return number_format($number, 0, ',', '.');
}

function format_decimal($number)
{
    if ($number === null) return null;
    if ($number === "") return "";
    return number_format($number, 2, ',', '.');
}

function month_dropdown($short = false)
{
    $list_bulan = months();
    for ($i = 0; $i < count($list_bulan); $i++) {
        $result[$i+1] = $list_bulan[$i];
    }
    return $result;
}

function months($short = false)
{
    return $short == true ?
        array('Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des') :
        array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
}

function days_from_date($date)
{
    return days()[date('N', strtotime($date))-1] ?? '';
}

function days()
{
    return array('Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
}

function fulldate($date, $divider = " ", $dayEnable = false, $shortMonth = false)
{
    if ($date == "") return "";
    $monthText = months($shortMonth);

    $dayInt = date('N', strtotime($date));
    $date = explode("-", date('Y-m-d', strtotime($date)));
    $monthInt = (int)$date[1];

    $result = [];
    if ($dayEnable == true) array_push($result, days()[$dayInt-1] . ', ');
    array_push($result, $date[2]);
    array_push($result, $monthText[$monthInt-1]);
    array_push($result, $date[0]);
    return join($divider, $result);
}

function format_date($date, $divider = "-")
{
    if ($date === null) return null;
    if ($date === "") return "";
    $date = explode("-", date('Y-m-d', strtotime($date)));
    return join($divider, [$date[2], $date[1], $date[0]]);
}

function format_time($time, $short = true)
{
    if ($time === null) return null;
    if ($time === "") return "";
    return $short == true ?
        date('H:i', strtotime($time)) :
        date('H:i:s', strtotime($time));
}

function number_to_alphabeth($number)
{
    $map = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    return $map[$number-1] ?? '';
}

function number_to_roman($number)
{
    $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $result = '';
    while ($number > 0) {
        foreach ($map as $roman => $int) {
            if($number >= $int) {
                $number -= $int;
                $result .= $roman;
                break;
            }
        }
    }
    return $result;
}

function roman_to_number($roman)
{
    $romans = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    );

    $result = 0;
    foreach ($romans as $key => $value) {
        while (strpos($roman, $key) === 0) {
            $result += $value;
            $roman = substr($roman, strlen($key));
        }
    }
    return $result;
}

function spellNumberCore($nilai)
{
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " ". $huruf[$nilai];
    } else if ($nilai <20) {
        $temp = spellNumberCore($nilai - 10). " belas";
    } else if ($nilai < 100) {
        $temp = spellNumberCore($nilai/10)." puluh". spellNumberCore($nilai % 10);
    } else if ($nilai < 200) {
        $temp = " seratus" . spellNumberCore($nilai - 100);
    } else if ($nilai < 1000) {
        $temp = spellNumberCore($nilai/100) . " ratus" . spellNumberCore($nilai % 100);
    } else if ($nilai < 2000) {
        $temp = " seribu" . spellNumberCore($nilai - 1000);
    } else if ($nilai < 1000000) {
        $temp = spellNumberCore($nilai/1000) . " ribu" . spellNumberCore($nilai % 1000);
    } else if ($nilai < 1000000000) {
        $temp = spellNumberCore($nilai/1000000) . " juta" . spellNumberCore($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
        $temp = spellNumberCore($nilai/1000000000) . " milyar" . spellNumberCore(fmod($nilai,1000000000));
    } else if ($nilai < 1000000000000000) {
        $temp = spellNumberCore($nilai/1000000000000) . " trilyun" . spellNumberCore(fmod($nilai,1000000000000));
    }
    return $temp;
}

function terbilang($number)
{
    return $number > 0 ? trim(spellNumberCore($number)) : "minus ". trim(spellNumberCore($number));
}

function date_difference($date1, $date2)
{
    $tgl1 = new DateTime($date1);
    $tgl2 = new DateTime($date2);
    return $tgl2->diff($tgl1)->days + 1;
}

function unformat_date($date)
{
    if ($date === null) return null;
    if ($date === "") return null;
    return date('Y-m-d', strtotime($date));
}

function unformat_number($number)
{
    if ($number === null) return null;
    if ($number === "") return "";
    $number = str_replace(".", "", $number);
    $number = str_replace(",", ".", $number);
    return $number;
}
