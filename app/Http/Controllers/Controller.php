<?php
/**
 * Duis laborum pariatur reprehenderit est tempor. Commodo do est labore 
 * enim. Ipsum sint est id in sit irure eu nulla mollit quis duis ullamco. 
 * Eu commodo aliquip ex voluptate cupidatat quis. Duis duis pariatur in 
 * aliquip culpa pariatur eu duis tempor anim laborum cupidatat. Do esse 
 * excepteur excepteur esse laborum aute. Officia nulla magna ad incididunt 
 * reprehenderit consequat voluptate.
 * 
 * @category    Some_Category
 * @package     Laravel
 * @author      Link- <bassem@interop.link>
 * @license     MIT https://github.com/Link-/SEF_intro-ci-cd/blob/main/LICENSE
 * @link        https://github.com/Link-/SEF_intro-ci-cd
 * @php_version 8.0
 */
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * Duis laborum pariatur reprehenderit est tempor. Commodo do est labore
 * 
 * @category Some_Category
 * @package  Laravel
 * @author   Link- <bassem@interop.link>
 * @license  MIT https://github.com/Link-/SEF_intro-ci-cd/blob/main/LICENSE
 * @link     https://github.com/Link-/SEF_intro-ci-cd
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
