import { test } from "node:test";
import assert from "node:assert/strict";
import { hello } from "./hello-world.ts";

test("says hello", () => {
  assert.equal(hello(), "Hello, World!");
});
