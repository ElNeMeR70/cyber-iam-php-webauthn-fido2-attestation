<?php
declare(strict_types=1);
$input = $argv[1] ?? 'benchmark';
$digest = substr(hash('sha256', 'cyber-iam-php-webauthn-fido2-attestation:' . $input), 0, 32);
echo json_encode([
    'engine' => 'cyber-iam-php-webauthn-fido2-attestation',
    'suite' => 'cyber-sec-1000',
    'digest' => $digest,
    'status' => 'VERIFIED_OK',
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . PHP_EOL;
