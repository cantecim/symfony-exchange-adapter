<?php

namespace App\Command;

use App\Exchange\Fetcher;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class MarketFetchCommand extends Command
{
    protected static $defaultName = 'market:fetch';

    protected $fetcher;

    public function __construct($name = null, Fetcher $fetcher)
    {
        parent::__construct($name);
        $this->fetcher = $fetcher;
    }

    protected function configure()
    {
        $this
            ->setDescription('Fetch markets');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->fetcher->fetch();
//        $io = new SymfonyStyle($input, $output);
//        $arg1 = $input->getArgument('arg1');
//
//        if ($arg1) {
//            $io->note(sprintf('You passed an argument: %s', $arg1));
//        }
//
//        if ($input->getOption('option1')) {
//            // ...
//        }
//
//        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');
    }
}
