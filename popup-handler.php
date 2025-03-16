<?php
$teamMembers = [
    "Jane" => [
        "name" => "Muhammad Ibnu Sofyan",
        "nim" => "2311103053",
        "kelas" => "07E",
        "email" => "muhammadibnusofyan003@gmail.com",
        "job" => "Frontend Developer",
        "image" => "ibnu.png"
    ],
    "Mike" => [
        "name" => "Meiwildan Muhammad Farrel",
        "nim" => "000000000",
        "kelas" => "07E",
        "email" => "xxxx@gmail.com",
        "job" => "UI/UX & Hosting",
        "image" => "farrel.png"
    ],
    "John" => [
        "name" => "Jaiz Cahya Prasetya",
        "nim" => "000000000",
        "kelas" => "07E",
        "email" => "xxxx@gmail.com",
        "job" => "Backend Developer",
        "image" => "jaiz.png"
    ],
    "Yuka" => [
        "name" => "Dedy Tigor Manurung",
        "nim" => "000000000",
        "kelas" => "07E",
        "email" => "xxxx@gmail.com",
        "job" => "Database",
        "image" => "dedy.png"
    ]
];

$popupData = [
    "show" => false,
    "title" => "",
    "job" => "",
    "nim" => "",
    "kelas" => "",
    "email" => "",
    "member" => ""
];

/**
 * Function untuk mendapatkan data anggota tim
 * @param string $memberId
 * @return array|null
 */
function getTeamMemberData($memberId)
{
    global $teamMembers;
    return isset($teamMembers[$memberId]) ? $teamMembers[$memberId] : null;
}

/**
 * Function untuk memproses popup
 * @param string $action
 * @param string $memberId
 * @return array
 */
function processPopup($action, $memberId = null)
{
    global $teamMembers;
    $popupData = [
        "show" => true,
        "title" => "",
        "job" => "",
        "nim" => "",
        "kelas" => "",
        "email" => "",
        "member" => ""
    ];

    if ($action === "showPopup") {
        if ($memberId && isset($teamMembers[$memberId])) {
            $member = $teamMembers[$memberId];
            $popupData["title"] = $member["name"];
            $popupData["nim"] = $member["nim"];
            $popupData["kelas"] = $member["kelas"];
            $popupData["email"] = $member["email"];
            $popupData["job"] = $member["job"];
            $popupData["member"] = $memberId;
        } else {
            $popupData["title"] = "Informasi Pesan Tiket";
            $popupData["job"] = "Silakan isi form berikut untuk memesan tiket Menara Pandang Teratai.";
        }
    } elseif ($action === "confirmAction") {
        $popupData["title"] = "Pesan Berhasil Dikirim";
        $popupData["job"] = "Terima kasih! Pesan Anda telah dikirim pada " . date("d-m-Y H:i:s");
    }

    return $popupData;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["action"])) {
        $action = $_POST["action"];
        $memberId = isset($_POST["member"]) ? $_POST["member"] : null;
        $popupData = processPopup($action, $memberId);
    }
}

extract($popupData);
