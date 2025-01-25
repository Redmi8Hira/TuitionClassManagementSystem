<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OnlineClassScheduleEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $about_class;
    public $date;
    public $time;
    public $teacherName;
    public $courseName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->title = $data['title'];
        $this->about_class = $data['about_class'];
        $this->date = $data['date'];
        $this->time = $data['time'];
        $this->teacherName = $data['teacherName'];
        $this->courseName = $data['courseName'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Online Class Schedule')->view('emails.online_class_schedule');
    }
}
