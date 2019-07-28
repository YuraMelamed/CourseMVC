<h1> <?= $pageTitle ?> </h1>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Currency</th>
            <th>Buy</th>
            <th>Sale</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>USD</td>
            <td> <?= round($courses['usd_buy'],3) ?> </td>
            <td> <?= round($courses['usd_sale'], 3) ?> </td>
        </tr>
        <tr>
            <td>EUR</td>
            <td> <?= round($courses['eur_buy'], 3) ?> </td>
            <td> <?= round($courses['eur_sale'],3) ?></td>
        </tr>
        <tr>
            <td>RUR</td>
            <td><?= round($courses['rur_buy'],3) ?></td>
            <td><?= round($courses['rur_sale'],3) ?></td>
        </tr>
    </tbody>
</table>