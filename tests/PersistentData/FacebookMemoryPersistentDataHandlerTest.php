<?php
/**
 * Copyright 2017 Facebook, Inc.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */
namespace Facebook\Tests\PersistentData;

use Facebook\PersistentData\FacebookMemoryPersistentDataHandler;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class FacebookMemoryPersistentDataHandlerTest extends MockeryTestCase
{
    public function testCanGetAndSetAVirtualValue()
    {
        $handler = new FacebookMemoryPersistentDataHandler();
        $handler->set('foo', 'bar');
        $value = $handler->get('foo');

        $this->assertEquals('bar', $value);
    }

    public function testGettingAValueThatDoesntExistWillReturnNull()
    {
        $handler = new FacebookMemoryPersistentDataHandler();
        $value = $handler->get('does_not_exist');

        $this->assertNull($value);
    }
}
