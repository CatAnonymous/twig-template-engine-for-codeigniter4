<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the frameworks
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @link: https://codeigniter4.github.io/CodeIgniter4/
 */

class Template
{
	private $twig;
	
	public function __construct() {
		$loader = new \Twig\Loader\FilesystemLoader(APPPATH.'Views');
		$twig = new \Twig\Environment($loader, [
			'debug' => true,
			'cache' => WRITEPATH.'cache',
		]);
		$twig->addExtension(new \Twig\Extension\DebugExtension);
		$this->twig = $twig;
	}
	
	public function display($tpl, $vars = array()) {
		try {
			echo $this->twig->render($tpl.'.twig', $vars);
		} catch (\Twig\Error\SyntaxError $e) {
			echo 'Syntax Error: ' . $e->getMessage();
		} catch (\Twig\Error\RuntimeError $e) {
			echo 'Runtime Error: ' . $e->getMessage();
		} catch (\Twig\Error\LoaderError $e) {
			echo 'Loader Error: ' . $e->getMessage();
		} catch (\Twig\Error\Error $e) {
			echo 'Twig Error: ' . $e->getMessage();
		}
	}
}