<?php
/**
 * Product Specs Table
 *
 * Renders WooCommerce product attributes as a clean spec sheet.
 * Include via: get_template_part('template-parts/product/specs-table')
 *
 * @package ULX
 */

global $product;

if (!$product) return;

$attributes = $product->get_attributes();

if (empty($attributes)) return;

$visible = array_filter($attributes, fn($a) => $a->get_visible());
if (empty($visible)) return;
?>

<div class="ulx-specs-table overflow-x-auto">
    <table class="w-full text-sm border-collapse">
        <thead>
            <tr style="background-color: var(--color-primary);">
                <th class="py-3 px-4 text-left text-xs font-semibold uppercase tracking-wider text-white w-2/5">
                    <?php esc_html_e('Specification', 'ulx'); ?>
                </th>
                <th class="py-3 px-4 text-left text-xs font-semibold uppercase tracking-wider text-white">
                    <?php esc_html_e('Value', 'ulx'); ?>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($visible as $i => $attribute) :
                $label  = wc_attribute_label($attribute->get_name());
                $values = wc_get_product_terms($product->get_id(), $attribute->get_name(), ['fields' => 'names']);
                if (empty($values)) continue;
                $bg = $i % 2 === 0 ? 'var(--color-card)' : 'var(--color-surface)';
            ?>
                <tr style="background-color: <?php echo esc_attr($bg); ?>; border-bottom: 1px solid var(--color-border);">
                    <td class="py-3 px-4 font-medium" style="color: var(--color-text);">
                        <?php echo esc_html($label); ?>
                    </td>
                    <td class="py-3 px-4" style="color: var(--color-muted);">
                        <?php echo esc_html(implode(', ', $values)); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
