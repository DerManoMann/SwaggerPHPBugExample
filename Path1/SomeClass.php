<?php

namespace SwaggerTest\Path1;

/**
 * @OA\Schema(
 * 		schema="ExampleSchema",
 * 		type="object",
 * 		@OA\Property(
 *     		property="layouts",
 *     		type="array",
 *    		@OA\Items(
 *     			type="object",
 *     			@OA\Property(
 *     				property="desktop",
 *     				ref="#/components/schemas/ExampleNestedSchema"
 *    			),
 *     		)
 *     )
 * ),
 *
 *  @OA\Schema(
 *     schema="ExampleNestedSchema",
 *     type="object",
 *     @OA\Property(
 *     		property="rows",
 *     		type="array",
 *     		@OA\Items(
 *     			type="object",
 *     		)
 *     )
 * )
 */
class SomeClass
{

}