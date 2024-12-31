<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class SessionFlashMessagesCell extends Cell
{
    public function render(): string
    {
        $successMessage = session()->getFlashdata('success');
        $deleteMessage = session()->getFlashdata('delete');
        $warningMessage = session()->getFlashdata('warning');

        return $this->view('session_flash_messages', [
            'successMessage' => $successMessage,
            'deleteMessage' => $deleteMessage,
            'warningMessage' => $warningMessage,
        ]);
    }
}
