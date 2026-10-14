<?php
$wantsJson = str_contains($_SERVER["HTTP_ACCEPT"] ?? "", "application/json");
$sendJson = static function (int $status, string $message): void {
    http_response_code($status);
    header("Content-Type: application/json; charset=utf-8");
    echo json_encode(["message" => $message]);
    exit;
};

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    if ($wantsJson) {
        $sendJson(405, "Deze pagina kan alleen via het inschrijfformulier worden geopend.");
    }

    http_response_code(405);
    exit("Deze pagina kan alleen via het inschrijfformulier worden geopend.");
}

$name = $_POST["name"] ?? null;
$email = $_POST["email"] ?? null;



$name = trim($name);
$email = trim($email);


if ($wantsJson) {
    $sendJson(200, "$name, je bent ingeschreven voor de nieuwsbrief.");
}
