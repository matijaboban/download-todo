<?php

use App\Models\Fields;
use App\Models\Statuses;
use App\Models\Types;
use Illuminate\Database\Seeder;

/*
|--------------------------------------------------------------------------
| Requests Seeder
|--------------------------------------------------------------------------
|
| This is a global Requests related data seeder factory.
|
*/

class ConfigurationsSeeder extends Seeder
{
    // Set initial Statuses
    protected $initStatuses = array(
            array(
                'name'  => 'requested',
                'label' => 'Requested',
                'note'  => 'A requested has been submitted'
                ),
            array(
                'name'  => 'in-progress',
                'label' => 'In Progress',
                'note'  => 'The request is being fulfilled.'
                ),
            array(
                'name'  => 'unavailable',
                'label' => 'Unavailable',
                'note'  => 'The requested item is currently unavailable.'
                ),
            array(
                'name'  => 'paused',
                'label' => 'Paused',
                'note'  => 'The requested fulfilled is paused.'
                ),
            array(
                'name'  => 'completed',
                'label' => 'Completed',
                'note'  => 'The request is fulfilled and available via appropriate access path.'
                )
        );


    // Set initial Statuses
    protected $initFields = array(
            array(
                'name'          => 'checkbox',
                'label'         => 'Checkbox',
                'note'          =>  'A check box',
                'attributes'    => '[{
                                    "value": [{
                                        "value": 1,
                                        "label": "Value is 1"
                                    },
                                    {
                                        "value": 2,
                                        "label": "Value is 2"
                                    },
                                    {
                                        "value": 3,
                                        "label": "Value is 3"
                                    }]
                }]',
                'validation'    => '[{
                                    "required": {
                                        "rule": true,
                                        "message": "Value is required"
                                    }
                                }]'
                ),
            array(
                'name'          => 'color',
                'label'         => 'Color',
                'note'          => 'A control for specifying a color',
                'attributes'    => '[{
                                    "defaultvalue": "#ffffff"
                }]',
                'validation'    => '[{
                                    "required": {
                                        "rule": true,
                                        "message": "Value is required"
                                    }
                                }]'
                ),
            array(
                'name'          => 'date',
                'label'         => 'Date',
                'note'          => 'A control for entering a date (year, month, and day, with no time',
                'attributes'    => '[{}]',
                'validation'    => '[{
                                    "required": {
                                        "rule": true,
                                        "message": "Value is required"
                                    }
                                }]'
                ),
            array(
                'name'          => 'datetime-local',
                'label'         => 'Datetime',
                'note'          => 'A control for entering a date and time, with no time zone',
                'attributes'    => '[{}]',
                'validation'    => '[{
                                    "required": {
                                        "rule": true,
                                        "message": "Value is required"
                                    }
                                }]'
                ),
            array(
                'name'          => 'email',
                'label'         => 'Email',
                'note'          => 'A field for editing an e-mail address',
                'attributes'    => '[{}]',
                'validation'    => '[{
                                    "required": {
                                        "rule": true,
                                        "message": "&label is required"
                                    },
                                    "min": {
                                        "rule": 1,
                                        "message": "&label must be longer then &rule character."
                                    },
                                    "max": {
                                        "rule": 120,
                                        "message": "&label must be less then &rule characters."
                                    },
                                    "validate_type": "true"
                                }]'
                ),
            array(
                'name'          => 'file',
                'label'         => 'File',
                'note'          => 'A control that lets the user select a file',
                'attributes'    => '[{}]',
                'validation'    => '[{
                                    "required": {
                                        "rule": true,
                                        "message": "Value is required"
                                    }
                                }]'
                ),
            array(
                'name'          => 'image',
                'label'         => 'Image',
                'note'          => 'A control that lets the user select a image',
                'attributes'    => '[{}]',
                'validation'    => '[{
                                    "required": {
                                        "rule": true,
                                        "message": "Value is required"
                                    },
                                    "min": {
                                        "rule": 1,
                                        "message": "Artist name must be longer then 1 character."
                                    },
                                    "max": {
                                        "rule": 120,
                                        "message": "Artist name must be less then 120 characters."
                                    }
                                }]'
                ),
            array(
                'name'          => 'month',
                'label'         => 'Month',
                'note'          => 'A control for entering a month and year, with no time zone',
                'attributes'    => '[{}]',
                'validation'    => '[{
                                    "required": {
                                        "rule": true,
                                        "message": "Value is required"
                                    }
                                }]'
                ),
            array(
                'name'          => 'number',
                'label'         => 'Number',
                'note'          => 'A control for entering a floating point number',
                'attributes'    => '[{}]',
                'validation'    => '[{
                                    "required": {
                                        "rule": true,
                                        "message": "Value is required"
                                    },
                                    "digits_between": {
                                        "min": 1,
                                        "max": 100,
                                        "message": "Value must be between 1 and 100."
                                    }
                                }]'
                ),
            array(
                'name'          => 'password',
                'label'         => 'Password',
                'note'          => 'A single-line text field whose value is obscured',
                'attributes'    => '[{}]',
                'validation'    => '[{
                                    "required": {
                                        "rule": true,
                                        "message": "Value is required"
                                    },
                                    "min": {
                                        "rule": 8,
                                        "message": "Input must be longer then 7 character."
                                    },
                                    "max": {
                                        "rule": 60,
                                        "message": "Input must be less then 60 character."
                                    }
                                }]'
                ),
            array(
                'name'          => 'radio',
                'label'         => 'Radio',
                'note'          => 'A single-line text field whose value is obscured',
                'attributes'    => '[{}]',
                'validation'    => '[{
                                    "required": {
                                        "rule": true,
                                        "message": "Value is required"
                                    },
                                    "min": {
                                        "rule": 8,
                                        "message": "Input must be longer then 7 character."
                                    },
                                    "max": {
                                        "rule": 60,
                                        "message": "Input must be less then 60 character."
                                    }
                                }]'
                ),
            array(
                'name'          => 'range',
                'label'         => 'Range',
                'note'          => 'A control for entering a number whose exact value is not important',
                'attributes'    => '[{
                                    "min": "1",
                                    "max": "100"
                                }]',
                'validation'    => '[{
                                    "required": {
                                        "rule": true,
                                        "message": "Value is required"
                                    },
                                    "min": {
                                        "rule": 1,
                                        "message": "Input must be longer then 1 character."
                                    },
                                    "max": {
                                        "rule": 100,
                                        "message": "Input must be less then 100 character."
                                    }
                                }]'
                ),
            array(
                'name'          => 'tel',
                'label'         => 'Tel',
                'note'          => 'A control for entering a telephone number',
                'attributes'    => '[{
                                    "maxlength": "15"
                                }]',
                'validation'    => '[{
                                    "required": {
                                        "rule": true,
                                        "message": "Value is required"
                                    },
                                    "digits_between": {
                                        "min": 1,
                                        "max": 15,
                                        "message": "Value must be between 1 and 15."
                                    }
                                }]'
                ),
            array(
                'name'          => 'text',
                'label'         => 'Text',
                'note'          => 'A single-line text field',
                'attributes'    => '[{
                                    "placeholder": "&label value"
                                }]',
                'validation'    => '[{
                                    "required": {
                                        "rule": true,
                                        "message": "&label is required"
                                    },
                                    "min": {
                                        "rule": 1,
                                        "message": "&label must be longer then &rule character."
                                    },
                                    "max": {
                                        "rule": 120,
                                        "message": "&label must be less then &rule characters."
                                    }
                                }]'
                ),
            array(
                'name'    => 'url',
                'label'         => 'Url',
                'note'          => 'A url field',
                'attributes'    => '[{}]',
                'validation'    => '[{
                                    "required": {
                                        "rule": true,
                                        "message": "&label is required"
                                    },
                                    "min": {
                                        "rule": 1,
                                        "message": "&label must be longer then &rule character."
                                    },
                                    "max": {
                                        "rule": 120,
                                        "message": "&label must be less then &rule characters."
                                    }
                                }]'
                ),
        );


    // Set initial status types
    protected $initRequestTypes = array(
            array(
                'name'      => 'album',
                'label'     => 'Album',
                'note'      => 'A full audio album.',
                'fields'    => '[{
                                    "field_id": 1,
                                    "type": "text",
                                    "field_type_id": 14,
                                    "name": "artist",
                                    "label": "Artist",
                                    "note": "The artist name. If this is a compilation album, enter %22various artists%22.",
                                    "atributes": {
                                        "placeholder": "Artist name"
                                    },
                                    "validation": {
                                        "required": {
                                            "rule": true,
                                            "initial": "off",
                                            "message": "Artist name is required"
                                        },
                                        "minlength": {
                                            "rule": 1,
                                            "initial": "off",
                                            "message": "Artist name must be longer then 1 character."
                                        },
                                        "maxlength": {
                                            "rule": 120,
                                            "initial": "off",
                                            "message": "Artist name must be less then 120 characters."
                                        }
                                    }
                                }, {
                                    "field_id": 2,
                                    "type": "text",
                                    "field_type_id": 14,
                                    "name": "album",
                                    "label": "Album",
                                    "note": "The album name",
                                    "atributes": {
                                        "placeholder": "Album name"
                                    },
                                    "validation": {
                                        "required": {
                                            "rule": true,
                                            "initial": "off",
                                            "message": "Album name is required"
                                        },
                                        "minlength": {
                                            "rule": 2,
                                            "initial": "off",
                                            "message": "Album name must be longer then 2 character."
                                        },
                                        "maxlength": {
                                            "rule": 300,
                                            "initial": "off",
                                            "message": "Album name must be less then 300 characters."
                                        }
                                    }
                                }]'
                ),
            array(
                'name'      => 'song',
                'label'     => 'Song',
                'note'      => 'A single song.',
                'fields'    => '[{
                                    "field_id": 1,
                                    "type": "text",
                                    "field_type_id": 14,
                                    "name": "artist",
                                    "label": "Artist",
                                    "note": "The artist name",
                                    "atributes": {
                                        "placeholder": "Artist name"
                                    },
                                    "validation": {
                                        "required": {
                                            "rule": true,
                                            "initial": "off",
                                            "message": "Artist name is required"
                                        },
                                        "minlength": {
                                            "rule": 1,
                                            "initial": "off",
                                            "message": "Artist name must be longer then 1 character."
                                        },
                                        "maxlength": {
                                            "rule": 120,
                                            "initial": "off",
                                            "message": "Artist name must be less then 120 characters."
                                        }
                                    }
                                }, {
                                    "field_id": 2,
                                    "type": "text",
                                    "field_type_id": 14,
                                    "name": "title",
                                    "label": "Song title",
                                    "note": "The song title",
                                    "atributes": {
                                        "placeholder": "Song title"
                                    },
                                    "validation": {
                                        "required": {
                                            "rule": true,
                                            "initial": "off",
                                            "message": "Song title is required"
                                        },
                                        "minlength": {
                                            "rule": 2,
                                            "initial": "off",
                                            "message": "Song title must be longer then 2 character."
                                        },
                                        "maxlength": {
                                            "rule": 300,
                                            "initial": "off",
                                            "message": "Song title must be less then 300 characters."
                                        }
                                    }
                                }]'
                ),
            array(
                'name'      => 'book',
                'label'     => 'Book',
                'note'      => 'An eBook.',
                'fields'    => '[{
                                    "field_id": 1,
                                    "type": "text",
                                    "field_type_id": 14,
                                    "name": "author",
                                    "label": "Author",
                                    "note": "The author name",
                                    "atributes": {
                                        "placeholder": "Author name"
                                    },
                                    "validation": {
                                        "required": {
                                            "rule": true,
                                            "initial": "off",
                                            "message": "Author name is required"
                                        },
                                        "minlength": {
                                            "rule": 1,
                                            "initial": "off",
                                            "message": "Author name must be longer then 1 character."
                                        },
                                        "maxlength": {
                                            "rule": 120,
                                            "initial": "off",
                                            "message": "Author name must be less then 120 characters."
                                        }
                                    }
                                }, {
                                    "field_id": 2,
                                    "type": "text",
                                    "field_type_id": 14,
                                    "name": "title",
                                    "label": "Book title",
                                    "note": "The book title",
                                    "atributes": {
                                        "placeholder": "Book title"
                                    },
                                    "validation": {
                                        "required": {
                                            "rule": true,
                                            "initial": "off",
                                            "message": "Book title is required"
                                        },
                                        "minlength": {
                                            "rule": 2,
                                            "initial": "off",
                                            "message": "Book title must be longer then 2 character."
                                        },
                                        "maxlength": {
                                            "rule": 400,
                                            "initial": "off",
                                            "message": "Book title must be less then 400 characters."
                                        }
                                    }
                                }]'
                ),
            array(
                'name'      => 'movie',
                'label'     => 'Movie',
                'note'      => 'A feature-length movie.',
                'fields'    => '[{
                                    "field_id": 1,
                                    "type": "text",
                                    "field_type_id": 14,
                                    "name": "title",
                                    "label": "Movie title",
                                    "note": "The movie title",
                                    "atributes": {
                                        "placeholder": "Movie title"
                                    },
                                    "validation": {
                                        "required": {
                                            "rule": true,
                                            "initial": "off",
                                            "message": "Movie title is required"
                                        },
                                        "minlength": {
                                            "rule": 1,
                                            "initial": "off",
                                            "message": "Movie title must be longer then 1 character."
                                        },
                                        "maxlength": {
                                            "rule": 200,
                                            "initial": "off",
                                            "message": "movie title must be less then 200 characters."
                                        }
                                    }
                                }, {
                                    "field_id": 2,
                                    "type": "number",
                                    "field_type_id": 9,
                                    "name": "year",
                                    "label": "Movie Year",
                                    "note": "The year of release",
                                    "atributes": {
                                        "placeholder": "Year of release"
                                    },
                                    "validation": {
                                        "required": {
                                            "rule": false
                                        },
                                        "minlength": {
                                            "rule": 4,
                                            "initial": "off",
                                            "message": "Year of release must be 4 character."
                                        },
                                        "maxlength": {
                                            "rule": 4,
                                            "initial": "off",
                                            "message": "Year of release must be 4 character."
                                        }
                                    }
                                }]'
                ),
            array(
                'name'      => 'documentary',
                'label'     => 'Documentary',
                'note'      => 'A feature-length documentary.',
                'fields'    => '[{
                                    "field_id": 1,
                                    "type": "text",
                                    "field_type_id": 14,
                                    "name": "title",
                                    "label": "Documentary title",
                                    "note": "The documentary title",
                                    "atributes": {
                                        "placeholder": "Documentary title"
                                    },
                                    "validation": {
                                        "required": {
                                            "rule": true,
                                            "initial": "off",
                                            "message": "Documentary title is required"
                                        },
                                        "minlength": {
                                            "rule": 1,
                                            "initial": "off",
                                            "message": "Documentary title must be longer then 1 character."
                                        },
                                        "maxlength": {
                                            "rule": 200,
                                            "initial": "off",
                                            "message": "Documentary title must be less then 200 characters."
                                        }
                                    }
                                }, {
                                    "field_id": 2,
                                    "type": "number",
                                    "field_type_id": 9,
                                    "name": "year",
                                    "label": "Documentary Year",
                                    "note": "The year of release",
                                    "atributes": {
                                        "placeholder": "Year of release"
                                    },
                                    "validation": {
                                        "required": {
                                            "rule": false
                                        },
                                        "minlength": {
                                            "rule": 4,
                                            "initial": "off",
                                            "message": "Year of release must be 4 character."
                                        },
                                        "maxlength": {
                                            "rule": 4,
                                            "initial": "off",
                                            "message": "Year of release must be 4 character."
                                        }
                                    }
                                }]'
                ),
            array(
                'name'      => 'tv-show',
                'label'     => 'TV Show',
                'note'      => 'A TV-show or a serialised documentary.',
                'fields'    => '[{
                                    "field_id": 1,
                                    "type": "text",
                                    "field_type_id": 14,
                                    "name": "title",
                                    "label": "TV Show title",
                                    "note": "The TV Show title",
                                    "atributes": {
                                        "placeholder": "TV Show title"
                                    },
                                    "validation": {
                                        "required": {
                                            "rule": true,
                                            "initial": "off",
                                            "message": "TV Show title is required"
                                        },
                                        "minlength": {
                                            "rule": 1,
                                            "initial": "off",
                                            "message": "TV Show title must be longer then 1 character."
                                        },
                                        "maxlength": {
                                            "rule": 200,
                                            "initial": "off",
                                            "message": "TV Show title must be less then 200 characters."
                                        }
                                    }
                                }, {
                                    "field_id": 2,
                                    "type": "text",
                                    "field_type_id": 14,
                                    "name": "requested-season",
                                    "label": "Requested season",
                                    "note": "The requested TV Show season. Use this field if only a certain season is required. Separate multiple seasons with a comma. Leave this field blank if the entire TV Show run is requested",
                                    "atributes": {
                                        "placeholder": "Season"
                                    },
                                    "validation": {
                                        "required": {
                                            "rule": false
                                        },
                                        "maxlength": {
                                            "rule": 60,
                                            "initial": "off",
                                            "message": "Requested TV Show season input must contain less then 60 character."
                                        }
                                    }
                                }]'
                ),
            array(
                'name'      => 'playlist',
                'label'     => 'Playlist',
                'note'      => 'A music playlist from Google Play.',
                'fields'    => '[{
                                    "field_id": 1,
                                    "type": "url",
                                    "field_type_id": 15,
                                    "name": "playlist-url",
                                    "label": "On-Line Playlist URL",
                                    "note": "The On-Line Playlist URL",
                                    "atributes": {
                                        "placeholder": "On-Line Playlist URL"
                                    },
                                    "validation": {
                                        "required": {
                                            "rule": true,
                                            "initial": "off",
                                            "message": "On-Line Playlist URL is required"
                                        },
                                        "maxlength": {
                                            "rule": 500,
                                            "initial": "off",
                                            "message": "Playlist URL must be less then 500 character."
                                        }
                                    }
                                }]'
                )
        );


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        // Seed initial Statuses
        foreach ($this->initStatuses as $status) {
            Statuses::create([
                'name'          => $status['name'],
                'label'         => $status['label'],
                'note'          => $status['note'],
            ]);
        }

        // Seed initial status types
        foreach ($this->initFields as $field) {
            Fields::create([
                'name'          => $field['name'],
                'label'         => $field['label'],
                'note'          => $field['note'],
                'attributes'    => $field['attributes'],
                'validation'    => $field['validation'],
            ]);
        }

        // Seed initial request types
        foreach ($this->initRequestTypes as $type) {

            // Replace field name with appropraite field ID from "Fields" model
            foreach ( $fields = json_decode($type['fields']) as $key => $field) {
                $fields[$key]->type = Fields::where('name', $field->type)->first()->id;
            }

            Types::create([
                'name'          => $type['name'],
                'label'         => $type['label'],
                'note'          => $type['note'],
                'fields'        => json_encode($fields),
            ]);
        }

    }

}
