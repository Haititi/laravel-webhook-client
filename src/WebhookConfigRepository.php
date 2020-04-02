<?php

namespace Spatie\WebhookClient;

class WebhookConfigRepository
{
    /** @var \Spatie\WebhookClient\WebhookConfig[] */
    protected $configs = array();

    public function addConfig(WebhookConfig $webhookConfig)
    {
        $this->configs[$webhookConfig->name] = $webhookConfig;
    }

    public function getConfig(string $name): ?WebhookConfig
    {
        return $this->configs[$name] ?? null;
    }
}
