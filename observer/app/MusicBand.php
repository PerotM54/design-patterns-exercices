<?php

namespace App;

class MusicBand implements \SplSubject
{
    private array $observers = [];
    private array $concerts = [];
    private string $lastConcertDate;
    private string $lastConcertLocation;

    public function __construct(private string $name) {}

    public function addNewConcertDate(string $date, string $location): void
    {
        $this->concerts[] = [
            'date' => $date,
            'location' => $location
        ];

        $this->lastConcertDate = $date;
        $this->lastConcertLocation = $location;

        $this->notify();
    }

    public function attach(\SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers = array_filter($this->observers, fn($o) => $o !== $observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLastConcertDate(): string
    {
        return $this->lastConcertDate;
    }

    public function getLastConcertLocation(): string
    {
        return $this->lastConcertLocation;
    }
}