<?php

use PHPUnit\Framework\TestCase;
use model\Annonce;

class AnnonceTest extends TestCase
{
    /**
     * Test que la classe Annonce peut être instanciée
     */
    public function testCanInstantiateAnnonce(): void
    {
        $annonce = new Annonce();
        $this->assertInstanceOf(Annonce::class, $annonce);
    }

    /**
     * Test que la table est correctement configurée
     */
    public function testTableIsCorrect(): void
    {
        $annonce = new Annonce();
        $this->assertEquals('annonce', $annonce->getTable());
    }

    /**
     * Test que la clé primaire est correctement configurée
     */
    public function testPrimaryKeyIsCorrect(): void
    {
        $annonce = new Annonce();
        $this->assertEquals('id_annonce', $annonce->getKeyName());
    }

    /**
     * Test que les timestamps sont désactivés
     */
    public function testTimestampsDisabled(): void
    {
        $annonce = new Annonce();
        $this->assertFalse($annonce->timestamps);
    }
}
