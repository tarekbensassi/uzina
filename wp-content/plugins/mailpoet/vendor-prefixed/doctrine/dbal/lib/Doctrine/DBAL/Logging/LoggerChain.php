<?php
 namespace MailPoetVendor\Doctrine\DBAL\Logging; if (!defined('ABSPATH')) exit; class LoggerChain implements \MailPoetVendor\Doctrine\DBAL\Logging\SQLLogger { private $loggers = array(); public function addLogger(\MailPoetVendor\Doctrine\DBAL\Logging\SQLLogger $logger) { $this->loggers[] = $logger; } public function startQuery($sql, array $params = null, array $types = null) { foreach ($this->loggers as $logger) { $logger->startQuery($sql, $params, $types); } } public function stopQuery() { foreach ($this->loggers as $logger) { $logger->stopQuery(); } } } 