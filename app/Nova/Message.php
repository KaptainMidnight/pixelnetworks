<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use App\Models\User;
use Laravel\Nova\Http\Requests\NovaRequest;

class Message extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \Chatify\Http\Models\Message::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'body';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'body'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make(__('Message'), 'body')->onlyOnDetail(),
            Text::make(__('Message'), 'body', function() {
                return Str::limit($this->body, 10);
            })->onlyOnIndex(),
            Text::make(__('Sender'), 'from_id', function() {
                $user = User::find($this->from_id)->name;
                return "<a class='no-underline dim text-primary font-bold' href='http://127.0.0.1:8000/adminpanel/resources/users/{$this->from_id}'>{$user}</a>";
            })->asHtml(),
            Text::make(__('Recipient'), 'to_id', function() {
                $user = User::find($this->to_id)->name;
                return "<a class='no-underline dim text-primary font-bold' href='http://127.0.0.1:8000/adminpanel/resources/users/{$this->to_id}'>{$user}</a>";
            })->asHtml(),
            Boolean::make(__('Favorite'), function() {
                return $this->from_id === $this->to_id;
            })
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
