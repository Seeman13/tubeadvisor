<?php

namespace App\Http\Requests\API\v1\Channel;

use Illuminate\Contracts\Validation\ValidationRule;

use App\Http\Requests\API\v1\BaseRequest;
use App\Models\Channel;

class ChannelRequest extends BaseRequest
{
    /**
     * @param Channel $model
     */
    public function __construct(private readonly Channel $model)
    {
        parent::__construct();
    }

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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'category'          => 'nullable|string|max:50',
            'language'          => 'nullable|string|max:50',
            'last_video_period' => 'nullable|string|max:11|in:last_7_days,last_month,last_year',
            'max_subscribers'   => 'nullable|integer|digits_between:1,20',
            'min_subscribers'   => 'nullable|integer|digits_between:1,20',
            'region'            => 'nullable|string|max:50',
        ];
    }

    /**
     * @return string[]
     */
    public function attributes(): array
    {
        return $this->model->attributeLabels();
    }

    /**
     * @return array
     */
    public function getQueryParams(): array
    {
        return $this->only([
            'category', 'language', 'last_video_period', 'max_subscribers', 'min_subscribers', 'region'
        ]);
    }

    /**
     * @return array
     */
    public function getQuerySorting(): array
    {
        return $this->only(['sort', 'direction']);
    }
}
