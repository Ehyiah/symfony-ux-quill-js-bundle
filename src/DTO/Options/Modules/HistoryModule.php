<?php

namespace Ehyiah\QuillJsBundle\DTO\Options\Modules;

/**
 * For options explanation see https://quilljs.com/docs/modules/history
 */
final class HistoryModule implements ModuleInterface
{
    public const NAME = 'history';

    /**
     * @param array<string, string> $options
     */
    public function __construct(
        public string $name = self::NAME,
        public array $options = [
            'delay' => '1000',
            'maxStack' => '100',
            'userOnly' => 'false',
        ],
    ) {
    }
}
