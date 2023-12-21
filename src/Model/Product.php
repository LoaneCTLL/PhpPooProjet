<?php

class Product {

    private int $id;
    private string $name;
    private string $description;
    private string $link;
    private string $price;
    private string $image_url;

    /**
     * @param int $id
     * @param string $name
     * @param string $description
     * @param string $link
     * @param string $price
     * @param string $image_url
     */
    public function __construct(int $id, string $name, string $description, string $link, string $price, string $image_url)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->link = $link;
        $this->price = $price;
        $this->image_url = $image_url;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->image_url;
    }

    /**
     * @param string $image_url
     */
    public function setImageUrl(string $image_url): void
    {
        $this->image_url = $image_url;
    }


    public function toArray(): array {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->getDescription(),
            'link_to_origin' => $this->getLinkToOrigin(),
            'price' => $this->getPrice(),
            'other_info' => $this->getOtherInfo(),
            'is_featured' => $this->getIsFeatured(),
        );
    }

}
