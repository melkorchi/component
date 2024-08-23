<?php
  namespace Logimek\Component;

  class Test
  {
    public function say(string $message): string
    {
      return $message;
    }

    public function saySalam(): string
    {
      return 'Salam 3aleikoum';
    }
  }