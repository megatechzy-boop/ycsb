<?php
// Shared inquiry form. Optional $formInterest preselects the topic; replies return to $page['path'].
$formInterest = $formInterest ?? 'hall';
?>
<form class="inquiry-form" action="/inquiry" method="post">
    <input type="hidden" name="back" value="<?= e($page['path']) ?>">
    <h3>चौकशी फॉर्म</h3>
    <?php if (isset($_GET['sent'])): ?>
        <p class="form-msg <?= $_GET['sent'] === '1' ? 'ok' : 'err' ?>">
            <?= $_GET['sent'] === '1' ? 'धन्यवाद! आम्ही लवकरच संपर्क करू.' : 'माफ करा, कृपया सर्व माहिती बरोबर भरा.' ?>
        </p>
    <?php endif; ?>
    <label>नाव *<input type="text" name="name" required maxlength="80"></label>
    <label>मोबाईल नंबर *<input type="tel" name="phone" required pattern="[0-9]{10}" maxlength="10" inputmode="numeric"></label>
    <label>कशाबद्दल चौकशी?
        <select name="interest">
            <option value="hall"<?= $formInterest === 'hall' ? ' selected' : '' ?>>सभागृह बुकिंग</option>
            <option value="hostel"<?= $formInterest === 'hostel' ? ' selected' : '' ?>>विद्यार्थी वसतिगृह</option>
            <option value="library"<?= $formInterest === 'library' ? ' selected' : '' ?>>स्पर्धा परीक्षा अभ्यासिका</option>
            <option value="history-library"<?= $formInterest === 'history-library' ? ' selected' : '' ?>>इतिहास ग्रंथालय</option>
            <option value="guidance"<?= $formInterest === 'guidance' ? ' selected' : '' ?>>विद्यार्थी मार्गदर्शन केंद्र</option>
            <option value="vadhu-var"<?= $formInterest === 'vadhu-var' ? ' selected' : '' ?>>वधू-वर सूचक केंद्र</option>
            <option value="visit"<?= $formInterest === 'visit' ? ' selected' : '' ?>>स्मृती भवन भेट</option>
            <option value="other"<?= $formInterest === 'other' ? ' selected' : '' ?>>इतर</option>
        </select>
    </label>
    <label>संदेश<textarea name="message" rows="4" maxlength="1000"></textarea></label>
    <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">
    <button type="submit" class="btn btn-primary">पाठवा</button>
</form>
