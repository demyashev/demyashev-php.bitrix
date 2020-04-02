<?php
/**
 * @link https://dev.1c-bitrix.ru/rest_help/timeman/index.php
 */
namespace Demyashev\Bitrix\Module;

use Demyashev\Bitrix\Module;
use Demyashev\Bitrix\HTTP\Request as HTTPRequest;
use Demyashev\Bitrix\Model\Timeman\Request as TimemanRequest;
use Demyashev\Bitrix\Model\Timeman\Response\Settings;
use Demyashev\Bitrix\Model\Timeman\Response\Worktime\Status;
use Demyashev\Bitrix\Model\Timeman\Response\Worktime\Pause;
use Demyashev\Bitrix\Model\Timeman\Response\Worktime\Open;
use Demyashev\Bitrix\Model\Timeman\Response\Worktime\Close;

class Timeman extends Module {

    public function status(TimemanRequest $request = null)
    {
        $http = new HTTPRequest();
        $data = [];

        $response = $http
            ->setUrl($this->getUrl() . 'timeman.status')
            ->setData($data)
            ->exec();

        return new Status($response);
    }

    public function pause(array $data = [])
    {
        $http = new HTTPRequest();

        $response =
            $http
                ->setUrl($this->getUrl() . 'timeman.pause')
                ->setData($data)
                ->exec();

        return new Pause($response);
    }

    public function open(array $data = [])
    {
        $http = new HTTPRequest();

        $response =
            $http
                ->setUrl($this->getUrl() . 'timeman.open')
                ->setData($data)
                ->exec();

        return new Open($response);
    }

    public function close(array $data = [])
    {
        $http = new HTTPRequest();

        $response =
            $http
                ->setUrl($this->getUrl() . 'timeman.close')
                ->setData($data)
                ->exec();

        return new Close($response);
    }

    public function settings(array $data = [])
    {
        $http = new HTTPRequest();

        $response =
            $http
                ->setUrl($this->getUrl() . 'timeman.settings')
                ->setData($data)
                ->exec();

        return new Settings($response);
    }
}