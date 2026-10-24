<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);

$page = [
    'title' => 'पान सापडले नाही | ' . SITE_NAME_MR,
    'description' => 'तुम्ही शोधत असलेले पान सापडले नाही.',
    'path' => '/404',
];

require __DIR__ . '/includes/header.php';
?>
<section class="section not-found">
    <div class="container narrow">
        <p class="not-found-code">४०४</p>
        <h1>पान सापडले नाही</h1>
        <p>तुम्ही शोधत असलेले पान हलवले गेले असेल किंवा अस्तित्वात नसेल.</p>
        <div class="btn-row">
            <a href="/" class="btn btn-primary">मुखपृष्ठ</a>
            <a href="/#facilities" class="btn btn-outline">सोयी-सुविधा</a>
            <a href="/contact" class="btn btn-outline">संपर्क</a>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
