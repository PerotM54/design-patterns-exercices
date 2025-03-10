<?php

namespace App;

class User implements \SplObserver
{
    private bool $notified = false;

    public function __construct(private string $name) {}

    public function update(\SplSubject $subject): void
    {
        if ($subject instanceof MusicBand) {
            $this->notified = true;
            echo "Notification: {$this->name} est informé que {$subject->getName()} joue le {$subject->getLastConcertDate()} à {$subject->getLastConcertLocation()}.\n";
        }
    }

    public function isNotified(): bool
    {
        return $this->notified;
    }
}