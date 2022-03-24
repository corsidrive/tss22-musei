<?php

$gamModel = new OpereGAMModel();
$opereGAM = $gamModel->importOpere('Adaptrer','../ciccio.json');

$pmdModel = new OperaPMDModel();
$operePMD = $pmdModel->importOpere('../ciccioPMD.json');

// PAGLIAIO HEYSTACK
$tutteLeOpere = array_merge($operePMD,$opereGAM);

$search = new SearchOpera($tutteLeOpere);
$risultatoOpereGam = $search->findByProvenienza('GAM')

$search = new SearchOpera($risultatoOpereGam);
$opereAutoriF = $search->findByAutore('F');

$search = new SearchOpera($opereAutoriF);
$search->findByTitolo('blue');



/**
  $risultato = $search->findByTitolo('blue')
               ->findByAutore('Mario')
 */
