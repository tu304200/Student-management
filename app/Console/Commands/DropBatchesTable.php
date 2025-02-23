<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;

class DropBatchesTable extends Command
{
    protected $signature = 'db:drop-batches';
    protected $description = 'Xóa bảng batches khỏi cơ sở dữ liệu';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Kiểm tra nếu bảng tồn tại và xóa nó
        if (Schema::hasTable('batches')) {
            Schema::dropIfExists('batches');
            $this->info('Bảng batches đã bị xóa.');
        } else {
            $this->error('Bảng batches không tồn tại.');
        }
    }
}
