<?php

$finder = PhpCsFixer\Finder::create()
	->in(__DIR__)
	->exclude(['vendor']);

$config = new PhpCsFixer\Config();
return $config->setRules([
	                         '@PSR2'                                  => true,
	                         'array_syntax'                           => ['syntax' => 'short'],
	                         'yoda_style'                             => true,
	                         'heredoc_to_nowdoc'                      => true,
	                         'linebreak_after_opening_tag'            => true,
	                         'multiline_whitespace_before_semicolons' => true,
	                         'no_useless_else'                        => true,
	                         'no_useless_return'                      => true,
	                         'ordered_class_elements'                 => true,
	                         'ordered_imports'                        => true,
	                         'phpdoc_add_missing_param_annotation'    => true,
	                         'phpdoc_order'                           => true,
	                         'phpdoc_separation'                      => true,
	                         'phpdoc_summary'                         => false,
	                         'phpdoc_trim'                            => true,
	                         'single_quote'                           => true,
	                         'strict_comparison'                      => true,
	                         'space_after_semicolon'                  => true,
	                         'concat_space'                           => ['spacing' => 'one'],
	                         'no_unused_imports'                      => true,
	                         'method_argument_space'                  => false,
	                         'blank_line_before_statement'            => true,
                         ])
	->setFinder($finder);
