<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductPageSearchExtension\Dependency\Plugin;

interface ProductConcretePageDataExpanderPreloaderPluginInterface
{
    /**
     * Specification:
     * - Preloads data required by the expander plugin for all given products at once.
     * - Implementing this interface allows the publisher to warm up any caches or
     *   perform bulk queries before the per-product expand() loop begins.
     *
     * @api
     *
     * @param array<\Generated\Shared\Transfer\ProductConcreteTransfer> $productConcreteTransfers
     *
     * @return void
     */
    public function preload(array $productConcreteTransfers): void;
}
