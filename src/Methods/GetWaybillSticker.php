<?php

namespace Naqel\Methods;

class GetWaybillSticker extends Method
{
    public function getWaybillNo(): int
    {
        return $this->params['WaybillNo'];
    }

    public function setWaybillNo(int $waybillNo): GetWaybillSticker
    {
        $this->params['WaybillNo'] = $waybillNo;

        return $this;
    }

    public function getStickerSize(): string
    {
        return $this->params['StickerSize'];
    }

    public function setStickerSize(string $stickerSize): GetWaybillSticker
    {
        $this->params['StickerSize'] = $stickerSize;

        return $this;
    }

    public function getPDF(): string
    {
        return $this->getResponse()->GetWaybillStickerResult;
    }
}
