<?php
namespace Futape\NodeTypes\Generators;

use Neos\ContentRepository\Domain\Model\NodeType;
use Neos\Flow\Annotations as Flow;
use Neos\Neos\Domain\Service\DefaultPrototypeGeneratorInterface;

/**
 * Generate a Fusion prototype definition without inheriting
 * from another prototype
 *
 * @Flow\Scope("singleton")
 */
class StandalonePrototypeGenerator implements DefaultPrototypeGeneratorInterface
{
	/**
	 * Generate a Fusion prototype definition for a given node type
	 *
	 * A node will not have a predefined renderer. That is the prototype
	 * won't extend another one but it's up to the user to set one.
	 * No other magic happens here.
	 *
	 * @param NodeType $nodeType
	 * @return string
	 */
    public function generate(NodeType $nodeType)
    {
        return '';
    }
}
