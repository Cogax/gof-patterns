package event;

import org.junit.After;
import org.junit.Before;
import org.junit.Test;

import java.io.ByteArrayOutputStream;
import java.io.PrintStream;

import static org.junit.Assert.*;

public class EventTest {
    private ByteArrayOutputStream outputStream = new ByteArrayOutputStream();

    @Before
    public void SetUp() {
        System.setOut(new PrintStream(outputStream));
    }

    @After
    public void tearDown() {
        System.setOut(null);
    }

    @Test
    public void testConsolePrinActionEvent() {
        // Create some events.
        ClickEvent clickEvent = new ClickEvent();
        Event myCustomEvent = new Event();

        // Create some bindable actions.
        ConsolePrintAction consolePrintAction = new ConsolePrintAction();
        consolePrintAction.bind(clickEvent, myCustomEvent);

        // Manually trigger some events.
        clickEvent.trigger();

        assertEquals("ConsolePrintCallback was executed!", outputStream.toString().trim());
    }
}