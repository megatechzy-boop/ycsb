<?php
// Shared inquiry form. Optional $formInterest preselects the topic; replies return to $page['path'].
$formInterest = $formInterest ?? 'hall';
?>
<form class="inquiry-form" action="/inquiry" method="post">
    <input type="hidden" name="back" value="<?= e($page['path']) ?>">
    <h3><?= t('चौकशी फॉर्म', 'Enquiry form') ?></h3>
    <?php if (isset($_GET['sent'])): ?>
        <p class="form-msg <?= $_GET['sent'] === '1' ? 'ok' : 'err' ?>">
            <?= $_GET['sent'] === '1' ? t('धन्यवाद! आम्ही लवकरच संपर्क करू.', 'Thank you! We will contact you soon.') : t('माफ करा, कृपया सर्व माहिती बरोबर भरा.', 'Sorry, please fill in all details correctly.') ?>
        </p>
    <?php endif; ?>
    <label><?= t('नाव', 'Name') ?> *<input type="text" name="name" required maxlength="80"></label>
    <label><?= t('मोबाईल नंबर', 'Mobile number') ?> *<input type="tel" name="phone" required pattern="[0-9]{10}" maxlength="10" inputmode="numeric"></label>
    <label><?= t('कशाबद्दल चौकशी?', 'Enquiry about') ?>
        <select name="interest">
            <option value="hall"<?= $formInterest === 'hall' ? ' selected' : '' ?>><?= t('सभागृह बुकिंग', 'Hall booking') ?></option>
            <option value="hostel"<?= $formInterest === 'hostel' ? ' selected' : '' ?>><?= t('विद्यार्थी वसतिगृह', 'Student hostel') ?></option>
            <option value="library"<?= $formInterest === 'library' ? ' selected' : '' ?>><?= t('स्पर्धा परीक्षा अभ्यासिका', 'UPSC / MPSC library') ?></option>
            <option value="history-library"<?= $formInterest === 'history-library' ? ' selected' : '' ?>><?= t('इतिहास ग्रंथालय', 'History library') ?></option>
            <option value="guidance"<?= $formInterest === 'guidance' ? ' selected' : '' ?>><?= t('विद्यार्थी मार्गदर्शन केंद्र', 'Student guidance centre') ?></option>
            <option value="vadhu-var"<?= $formInterest === 'vadhu-var' ? ' selected' : '' ?>><?= t('वधू-वर सूचक केंद्र', 'Matrimonial centre') ?></option>
            <option value="visit"<?= $formInterest === 'visit' ? ' selected' : '' ?>><?= t('स्मृती भवन भेट', 'Visiting the Smruti Bhavan') ?></option>
            <option value="other"<?= $formInterest === 'other' ? ' selected' : '' ?>><?= t('इतर', 'Other') ?></option>
        </select>
    </label>
    <label><?= t('संदेश', 'Message') ?><textarea name="message" rows="4" maxlength="1000"></textarea></label>
    <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">
    <button type="submit" class="btn btn-primary"><?= t('पाठवा', 'Send') ?></button>
</form>
