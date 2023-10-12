<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\Event
 *
 * @property int $id;
 * @property string $name
 * @property string $description
 * @property string $location
 * @property \date $date
 * @property \date $time
 * @property float $ticket_price
 * @property int $max_attendees
 * @property \date $registration_deadline
 */
class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'description' => $this->description,
            'location' => $this->location,
            'date' => $this->date,
            'time' => $this->time,
            'ticketPrice' => $this->ticket_price,
            'maxAttendees' => $this->max_attendees,
            'registrationDeadline' => $this->registration_deadline,
        ];
    }
}
