<?php require __DIR__ . '/database.php'; ?>
<?php include __DIR__ . '/header.php'; ?>

<h2>Oficina de Artes</h2>
<?php
$about = $pdo->query("SELECT * FROM sobre ORDER BY id DESC LIMIT 1")->fetch();
if ($about):
?>
  <h3><?= e($about['titulo']) ?></h3>
  <p><?= nl2br(e($about['descricao'])) ?></p>
  <?php if ($about['foto_path']): ?>
    <p><img src="<?= e($about['foto_path']) ?>" alt="Foto da empresa" width="300"></p>
  <?php endif; ?>
<?php else: ?>
  <p>A Oficina Cerâmica Francisco Brennand é um museu de arte brasileiro localizado na cidade do Recife, capital de Pernambuco. Foi criada pelo artista plástico pernambucano que dá nome ao conjunto arquitetônico, Francisco Brennand.”.</p>
<?php endif; ?>

<?php include __DIR__ . '/footer.php'; ?>