<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use OpenApi\Generator;

class GenerateSwaggerDocs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'swagger:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Swagger API documentation';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $openApi = Generator::scan([app_path()]);
        file_put_contents(public_path('api-docs.json'), $openApi->toJson());
        $this->info('Swagger documentation generated successfully!');
    }
}
