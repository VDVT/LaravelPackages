<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo "<pre>";
        print_r(__('vdvt/support::support.package_name'));
        echo "</pre>";die;
        echo "<pre>";
        print_r(view('vdvt/support::index')->with('htmlContent', false)->render());
        echo "</pre>";die;
    }
}
