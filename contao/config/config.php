<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package     MetaModels
 * @subpackage  AttributeTranslatedTableText
 * @author      Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author      Andreas Isaak <andy.jared@googlemail.com>
 * @author      David Greminger <david.greminger@1up.io>
 * @copyright   The MetaModels team.
 * @license     LGPL.
 * @filesource
 */

$GLOBALS['METAMODELS']['attributes']['translatedtabletext']['class'] =
    'MetaModels\Attribute\TranslatedTableText\TranslatedTableText';
$GLOBALS['METAMODELS']['attributes']['translatedtabletext']['image'] =
    'system/modules/metamodelsattribute_translatedtabletext/html/translatedtabletext.png';

$GLOBALS['TL_EVENTS']['dc-general.factory.build-data-definition[tl_metamodel_attribute]'][] =
    'MetaModels\DcGeneral\Events\Table\Attribute\TranslatedTableText\TranslatedTableTextCols::registerEvents';