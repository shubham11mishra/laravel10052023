<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;


class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
    protected function prepareForValidation(): void
    {
        // 'title' => $title,
        // 'meta_title' => $title,
        // 'slug' => Str::slug($title,'-'),
        // 'summary' => fake()->paragraph(3),
        // 'published' => true,
        // 'content' => fake()->paragraph(20),
        // 'published_at' => fake()->dateTime,
        // 'user_id' => 1
        // {
        //     "content": "shubham mishra asd",
        //     "pills": [
        //         {
        //             "title": "Laboriosam quidem.",
        //             "slug": "laboriosam_quidem",
        //             "id": 1
        //         }
        //     ],
        //     "title": "asd"
        // }
        // dd( );
        // dd(json_decode($this->content));

        $titleSlug = Str::slug($this->title, '-');
        if (Post::where('slug', $titleSlug)->exists()) {
            $titleSlug = $titleSlug . "-" . rand(1, 99);
        }
        $this->merge([
            'meta_title' => $this->title,
            'slug' => $titleSlug,
            'summary' => json_decode($this->content)->content,
            'published' => true,
            'published_at' => now(),
            'user_id' => auth()->user()->id
        ]);
    }
}
