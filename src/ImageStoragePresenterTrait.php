<?php

declare(strict_types=1);

namespace Contributte\ImageStorage;

use Nette\Application\UI\ITemplate;

//phpcs:disable SlevomatCodingStandard.Classes.SuperfluousTraitNaming.SuperfluousSuffix

trait ImageStoragePresenterTrait
{

	/** @var ImageStorage */
	public $imageStorage;


	public function injectImageStorage(ImageStorage $imageStorage): void
	{
		$this->imageStorage = $imageStorage;
	}


	public function createTemplate(?string $class = null): ITemplate
	{
		$template = parent::createTemplate($class);

		$template->imageStorage = $this->imageStorage;

		return $template;
	}
}

// phpcs:enable
